document.addEventListener("DOMContentLoaded", () => {
    // --- DATA ---
    const events = typeof bootcampEvents !== "undefined" ? bootcampEvents : [];

    let currentFilter = "all";
    let currentMonth = 5; // June (0-indexed)
    let currentYear = 2026;

    // --- ELEMENTS ---
    const calendarGrid = document.getElementById("calendar-grid");
    const monthYearLabel = document.getElementById("current-month");
    const prevMonthBtn = document.getElementById("prev-month");
    const nextMonthBtn = document.getElementById("next-month");
    const filterBtns = document.querySelectorAll(".filter-btn");

    // Panel States
    const emptyState = document.getElementById("empty-day-state");
    const eventListState = document.getElementById("event-list-state");

    // Detail View Elements (Inside eventListState)
    const dayNameEl = document.getElementById("selected-day-name");
    const dayNumEl = document.getElementById("selected-day-num");
    const eventTitleEl = document.getElementById("selected-event-title");
    const eventCatEl = document.getElementById("selected-event-category");
    const eventProjEl = document.getElementById("selected-event-project");
    const eventTimeEl = document.getElementById("selected-event-time");
    const eventPriceEl = document.getElementById("selected-event-price");

    const bookBtn = document.getElementById("book-btn");
    let selectedEventData = null;
    let countdownInterval = null;

    // Coming Soon Popup Elements
    const comingSoonPopup = document.getElementById("coming-soon-popup");
    const popupContent = document.getElementById("popup-content");
    const popupClose = document.getElementById("close-popup");
    const popupOverlay = document.getElementById("popup-overlay");

    // --- FUNCTIONS ---

    function getEventStatus(event) {
        if (!event.link || event.link.trim() === "") {
            return "COMING_SOON";
        }

        const today = new Date();
        today.setHours(0, 0, 0, 0);

        const eventDate = new Date(event.date);
        eventDate.setHours(0, 0, 0, 0);

        const diffTime = eventDate - today;
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

        if (diffDays < 2) {
            return "CLOSED";
        }

        return "OPEN";
    }

    function getStatusLabel(status, extraClasses = "") {
        let baseClass = "text-[10px] font-bold px-2 py-1 rounded-full " + extraClasses;

        if (status === "OPEN") {
            return `<span class="bg-green-100 text-green-600 ${baseClass}">OPEN REGISTRATION</span>`;
        } else if (status === "CLOSED") {
            return `<span class="bg-red-100 text-red-600 ${baseClass}">CLOSED</span>`;
        } else {
            return `<span class="bg-slate-100 text-slate-500 ${baseClass}">COMING SOON</span>`;
        }
    }

    // Countdown Timer Logic
    function startCountdown(targetDateStr, elementId, containerId = null) {
        if (countdownInterval) clearInterval(countdownInterval);

        const targetDate = new Date(`${targetDateStr}T00:00:00`).getTime();
        const displayEl = document.getElementById(elementId);
        const containerEl = containerId ? document.getElementById(containerId) : null;

        function updateTimer() {
            const now = new Date().getTime();
            const distance = targetDate - now;

            if (distance < 0) {
                if (containerEl) containerEl.classList.add("hidden");
                if (displayEl) displayEl.innerHTML = "PENDAFTARAN DITUTUP";
                clearInterval(countdownInterval);
                return;
            }

            if (containerEl) containerEl.classList.remove("hidden");

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (displayEl) {
                displayEl.innerHTML = `${String(days).padStart(2, "0")} Hari : ${String(hours).padStart(2, "0")} Jam : ${String(minutes).padStart(2, "0")} Menit : ${String(seconds).padStart(2, "0")} Detik`;
            }
        }

        updateTimer();
        countdownInterval = setInterval(updateTimer, 1000);
    }

    // Scroll Reveal Logic
    const revealObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        },
        { threshold: 0.1 },
    );

    document.querySelectorAll(".reveal").forEach((el) => revealObserver.observe(el));

    function injectCalendarMobileStyle() {
        if (document.getElementById("calendar-mobile-js-style")) return;

        const style = document.createElement("style");
        style.id = "calendar-mobile-js-style";
        style.textContent = `
      @media (max-width: 480px) {
        .calendar-day.has-event {
          border-width: 1px !important;
          box-shadow: none !important;
          gap: 2px !important;
          padding: 2px !important;
          justify-content: center !important;
        }

        .calendar-day.has-event.open-registration:not(.calendar-active) {
          border: 1px solid #00AE90 !important;
          box-shadow: none !important;
        }

        .calendar-day.has-event > span {
          line-height: 1 !important;
          display: block !important;
          transform: none !important;
        }

        .calendar-day.has-event > div {
          margin-top: 0 !important;
          line-height: 0 !important;
          position: static !important;
          transform: none !important;
        }

        .calendar-day.has-event .event-dot {
          width: 3px !important;
          height: 3px !important;
          margin: 0 !important;
        }

        .calendar-day.calendar-active {
          background-color: #00AE90 !important;
          color: white !important;
          border: 1px solid #00AE90 !important;
          box-shadow: 0 10px 15px -3px rgba(0, 174, 144, 0.3) !important;
          outline: none !important;
        }

        .calendar-day.calendar-active .event-dot {
          background-color: white !important;
        }
      }
    `;

        document.head.appendChild(style);
    }

    function renderCalendar() {
        calendarGrid.innerHTML = "";

        const firstDay = new Date(currentYear, currentMonth, 1).getDay();
        const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

        const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

        monthYearLabel.textContent = `${monthNames[currentMonth]} ${currentYear}`;

        // Empty slots
        for (let i = 0; i < firstDay; i++) {
            const emptyDiv = document.createElement("div");
            calendarGrid.appendChild(emptyDiv);
        }

        // Days
        for (let day = 1; day <= daysInMonth; day++) {
            const dateStr = `${currentYear}-${String(currentMonth + 1).padStart(2, "0")}-${String(day).padStart(2, "0")}`;
            const dayEl = document.createElement("div");

            dayEl.classList.add("calendar-day");
            dayEl.textContent = day;

            const dayEvents = events.filter((e) => e.date === dateStr);
            const filteredDayEvents = currentFilter === "all" ? dayEvents : dayEvents.filter((e) => e.category === currentFilter);

            dayEl.innerHTML = `<span>${day}</span>`;

            if (filteredDayEvents.length > 0) {
                dayEl.classList.add("has-event");
                dayEl.setAttribute("title", "Mini Bootcamp Available");

                // Special highlight if any event on this day is open
                const isOpenDay = filteredDayEvents.some((e) => getEventStatus(e) === "OPEN");

                if (isOpenDay) {
                    dayEl.classList.add("open-registration");
                }

                // Indicator Container
                const indicatorContainer = document.createElement("div");
                indicatorContainer.className = "flex flex-col items-center mt-1";

                // Dot
                const dot = document.createElement("div");
                dot.className = `event-dot w-1.5 h-1.5 rounded-full ${isOpenDay ? "bg-primary" : "bg-slate-300"}`;

                indicatorContainer.appendChild(dot);
                dayEl.appendChild(indicatorContainer);

                dayEl.addEventListener("click", () => selectDay(day, filteredDayEvents));
            } else {
                dayEl.addEventListener("click", () => {
                    document.querySelectorAll(".calendar-day").forEach((d) => d.classList.remove("calendar-active"));
                    dayEl.classList.add("calendar-active");
                    showEmpty();
                });
            }

            calendarGrid.appendChild(dayEl);
        }
    }

    function selectDay(day, dayEvents) {
        // Highlight active day
        document.querySelectorAll(".calendar-day").forEach((d) => d.classList.remove("calendar-active"));

        const days = calendarGrid.querySelectorAll(".calendar-day");

        for (let el of days) {
            if (el.textContent.includes(day)) {
                el.classList.add("calendar-active");
                break;
            }
        }

        // Group events by project (karena title bisa sama untuk beberapa kelas IoT)
        const groupedEventsMap = new Map();

        dayEvents.forEach((event) => {
            if (groupedEventsMap.has(event.project)) {
                // Hindari duplikasi waktu jika sudah ada
                if (!groupedEventsMap.get(event.project).times.includes(event.time)) {
                    groupedEventsMap.get(event.project).times.push(event.time);
                }
            } else {
                groupedEventsMap.set(event.project, {
                    ...event,
                    times: [event.time],
                });
            }
        });

        const groupedEvents = Array.from(groupedEventsMap.values());

        if (groupedEvents.length > 1) {
            showEventList(day, groupedEvents);
        } else {
            showEventDetail(day, groupedEvents[0]);
        }
    }

    function showEventList(day, dayEvents) {
        emptyState.classList.add("hidden");
        eventListState.classList.remove("hidden");

        // Show List Header
        const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

        const dayNames = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        const dateObj = new Date(currentYear, currentMonth, day);

        dayNameEl.textContent = dayNames[dateObj.getDay()].substring(0, 3).toUpperCase();
        dayNumEl.textContent = day;

        eventTitleEl.textContent = `${dayNames[dateObj.getDay()]}, ${day} ${monthNames[currentMonth]}`;
        eventCatEl.innerHTML = `<i class="fas fa-layer-group text-primary/70"></i> ${dayEvents.length} Program Tersedia`;

        const badgesContainer = document.getElementById("selected-event-badges");

        if (badgesContainer) {
            badgesContainer.innerHTML = "";
        }

        // Replace main content with a list
        const detailContainer = eventListState.querySelector("#event-list-container");
        detailContainer.innerHTML = "";

        dayEvents.forEach((event) => {
            const status = getEventStatus(event);
            const statusLabel = getStatusLabel(status);

            const timeHTML = event.times
                ? event.times.map((t) => `<span class="bg-slate-200 text-slate-600 px-2 py-1 rounded text-[10px] font-bold">${t} WIB</span>`).join("")
                : `<span class="bg-slate-200 text-slate-600 px-2 py-1 rounded text-[10px] font-bold">${event.time} WIB</span>`;

            const item = document.createElement("div");
            item.className = "p-4 rounded-2xl bg-slate-50 border border-slate-100 cursor-pointer hover:border-primary/30 hover:bg-white transition-all group";

            item.innerHTML = `
        <div class="flex items-start justify-between gap-4 mb-2">
          <h5 class="font-bold text-darkText group-hover:text-primary transition-colors leading-tight">${event.title}</h5>
          <div class="shrink-0">${statusLabel}</div>
        </div>
        <p class="text-xs text-slate-400 font-medium mb-3"><i class="fas fa-rocket mr-1 text-primary/70"></i> ${event.project}</p>
        <div class="flex flex-wrap gap-2">
          ${timeHTML}
        </div>
      `;

            item.addEventListener("click", () => showEventDetail(day, event, dayEvents));
            detailContainer.appendChild(item);
        });

        bookBtn.classList.add("hidden");
    }

    function showEventDetail(day, event, dayEvents = []) {
        emptyState.classList.add("hidden");
        eventListState.classList.remove("hidden");
        bookBtn.classList.remove("hidden");

        selectedEventData = event; // Store current event

        const dateObj = new Date(event.date);
        const dayNames = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

        dayNameEl.textContent = dayNames[dateObj.getDay()].substring(0, 3).toUpperCase();
        dayNumEl.textContent = day;

        const status = getEventStatus(event);
        const statusLabel = getStatusLabel(status);

        eventTitleEl.textContent = event.title;
        eventCatEl.innerHTML = `<i class="fas fa-user-graduate text-primary/70"></i> ${event.target}`;

        const badgesContainer = document.getElementById("selected-event-badges");

        if (badgesContainer) {
            badgesContainer.innerHTML = statusLabel;
        }

        const detailContainer = eventListState.querySelector("#event-list-container");
        let content = "";

        if (dayEvents.length > 1) {
            content += `
        <button id="back-to-list" class="inline-flex items-center justify-center gap-2 px-5 py-3 bg-white border border-slate-200 hover:border-primary/30 hover:bg-slate-50 text-slate-600 hover:text-primary rounded-xl text-sm font-bold transition-all cursor-pointer mb-6 w-full sm:w-auto shadow-sm">
          <i class="fas fa-arrow-left"></i> Kembali ke Daftar Kelas
        </button>
      `;
        }

        // Information about H-2 Registration
        content += `
      <div class="bg-blue-50 text-blue-700 rounded-2xl p-4 border border-blue-100 mb-6 flex items-start gap-3">
        <i class="fas fa-info-circle mt-0.5"></i>
        <p class="text-xs font-medium leading-relaxed">Pendaftaran kelas maksimal dilakukan <strong>H-2</strong> sebelum kegiatan kelas berlangsung.</p>
      </div>
    `;

        content += `
      <div class="mb-6">
        <h6 class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2">Deskripsi Kelas</h6>
        <p class="text-sm text-slate-600 leading-relaxed">${event.description || "Program intensif selama satu sesi untuk menguasai skill teknologi praktis dengan output project nyata."}</p>
      </div>

      <div class="flex flex-col gap-3 mb-6">
        <div class="bg-slate-50 p-4 rounded-2xl flex items-center gap-4 border border-slate-100">
          <div class="w-10 h-10 rounded-xl bg-white shadow-sm flex items-center justify-center text-primary shrink-0"><i class="fas fa-rocket"></i></div>
          <div>
            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-0.5">Output Project</p>
            <p class="text-sm font-bold text-darkText leading-tight">${event.project}</p>
          </div>
        </div>

        <div class="bg-slate-50 p-4 rounded-2xl flex items-center gap-4 border border-slate-100">
          <div class="w-10 h-10 rounded-xl bg-white shadow-sm flex items-center justify-center text-primary shrink-0"><i class="fas fa-clock"></i></div>
          <div>
            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1.5">Pilihan Waktu</p>
            <div class="flex flex-wrap gap-2">
              ${event.times ? event.times.map((t) => `<span class="bg-slate-200 text-slate-600 px-2 py-0.5 rounded text-xs font-semibold whitespace-nowrap">${t}</span>`).join("") : `<span class="bg-slate-200 text-slate-600 px-2 py-0.5 rounded text-xs font-semibold whitespace-nowrap">${event.time}</span>`}
            </div>
          </div>
        </div>

        <div class="bg-slate-50 p-4 rounded-2xl flex items-center gap-4 border border-slate-100">
          <div class="w-10 h-10 rounded-xl bg-white shadow-sm flex items-center justify-center text-slate-400 shrink-0"><i class="fas fa-tag"></i></div>
          <div class="flex-1 flex flex-wrap items-center justify-between gap-2">
            <div>
              <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-0.5">Harga Tiket</p>
              <div class="flex items-center gap-2">
                <span class="text-xs text-slate-400 line-through">Rp49.000</span>
                <span class="text-lg font-black text-primary">Rp29.000</span>
              </div>
            </div>
            <span class="bg-accent/10 text-accent text-[10px] font-bold px-3 py-1.5 rounded-full whitespace-nowrap">EARLY BIRD</span>
          </div>
        </div>
      </div>
    `;

        detailContainer.innerHTML = content;

        const backBtn = document.getElementById("back-to-list");

        if (backBtn) {
            backBtn.addEventListener("click", () => {
                showEventList(day, dayEvents);
            });
        }

        if (status === "OPEN") {
            bookBtn.textContent = "Daftar Kelas Ini";
            bookBtn.className = "w-full py-4 bg-primary text-white rounded-2xl font-bold shadow-lg shadow-primary/20 hover:shadow-xl transition-all";
        } else if (status === "CLOSED") {
            bookBtn.textContent = "Pendaftaran Ditutup";
            bookBtn.className = "w-full py-4 bg-slate-200 text-slate-500 rounded-2xl font-bold cursor-not-allowed pointer-events-none";
        } else {
            bookBtn.textContent = "Daftar Kelas Ini";
            bookBtn.className = "w-full py-4 bg-primary text-white rounded-2xl font-bold shadow-lg shadow-primary/20 hover:shadow-xl transition-all";
        }
    }

    function showEmpty() {
        emptyState.classList.remove("hidden");
        eventListState.classList.add("hidden");

        if (countdownInterval) clearInterval(countdownInterval);
    }

    // Popup logic
    function showComingSoonPopup() {
        comingSoonPopup.classList.remove("invisible", "opacity-0");
        popupContent.classList.remove("scale-90");
    }

    function closeComingSoonPopup() {
        comingSoonPopup.classList.add("invisible", "opacity-0");
        popupContent.classList.add("scale-90");
    }

    popupClose.addEventListener("click", closeComingSoonPopup);
    popupOverlay.addEventListener("click", closeComingSoonPopup);

    // Book Button logic
    bookBtn.addEventListener("click", () => {
        if (!selectedEventData) return;

        const status = getEventStatus(selectedEventData);

        if (status === "OPEN") {
            window.open(selectedEventData.link, "_blank");
        } else if (status === "CLOSED") {
            alert("Maaf, pendaftaran kelas ini sudah ditutup karena melewati batas H-2.");
        } else {
            showComingSoonPopup();
        }
    });

    // Render Mentors
    const mentorsGrid = document.getElementById("mentors-grid");

    if (mentorsGrid && typeof mentorList !== "undefined") {
        mentorsGrid.innerHTML = "";

        const assetBase = "/assets/custom/starter_project";

        mentorList.forEach((mentor) => {
            mentorsGrid.innerHTML += `
        <div class="mentor-card bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-premium transition-all duration-300 hover:shadow-hover hover:translate-y-[-6px] group text-center flex flex-col items-center">
          <div class="relative mb-6">
            <div class="w-24 h-24 rounded-2xl overflow-hidden transition-all duration-500 ring-4 ring-slate-50 group-hover:ring-primary/20">
              <img
                src="${assetBase}/${mentor.image}"
                data-hover="${mentor.hoverImage}"
                alt="${mentor.name}"
                class="mentor-img w-full h-full object-cover opacity-60 brightness-90 transition-all duration-500"
                loading="lazy"
              />
            </div>
          </div>
          <span class="bg-primary/10 text-primary text-xs font-bold px-3 py-1 rounded-full mb-4">${mentor.role}</span>
          <h4 class="text-xl font-bold mb-1 text-darkText">${mentor.name}</h4>
          <p class="text-primary text-xs font-bold mb-4 uppercase tracking-wider">${mentor.expertise}</p>
          <p class="text-slate-400 text-sm leading-relaxed">${mentor.description}</p>
        </div>
      `;
        });

        // Setelah semua card dirender, pasang hover listener
        document.querySelectorAll(".mentor-card").forEach((card) => {
            const img = card.querySelector(".mentor-img");
            const originalSrc = img.src;
            const hoverSrc = img.dataset.hover;

            card.addEventListener("mouseenter", () => {
                if (hoverSrc) img.src = hoverSrc;
                img.style.opacity = "1";
                img.style.filter = "brightness(100%)";
            });

            card.addEventListener("mouseleave", () => {
                img.src = originalSrc;
                img.style.opacity = "0.6";
                img.style.filter = "brightness(90%)";
            });
        });
    }

    // Filtering
    filterBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            filterBtns.forEach((b) => {
                b.classList.remove("active", "bg-primary", "text-white", "shadow-lg", "shadow-primary/20");
                b.classList.add("bg-white", "text-slate-500", "border", "border-slate-200");
            });

            btn.classList.add("active", "bg-primary", "text-white", "shadow-lg", "shadow-primary/20");
            btn.classList.remove("bg-white", "text-slate-500", "border-slate-200");

            currentFilter = btn.dataset.filter;

            renderCalendar();
            showEmpty();
        });
    });

    // Navigation
    prevMonthBtn.addEventListener("click", () => {
        currentMonth--;

        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }

        renderCalendar();
        showEmpty();
    });

    nextMonthBtn.addEventListener("click", () => {
        currentMonth++;

        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }

        renderCalendar();
        showEmpty();
    });

    // Initial load
    injectCalendarMobileStyle();
    renderCalendar();
    startCountdown("2026-03-28", "hero-countdown", "hero-countdown-container");

    // Render Testimonials
    const testimonialContainer = document.getElementById("testimonial-container");

    if (testimonialContainer && typeof testimonialList !== "undefined") {
        testimonialContainer.innerHTML = "";

        testimonialList.forEach((testi) => {
            let starsHtml = "";

            for (let i = 0; i < testi.rating; i++) {
                starsHtml += '<i class="fas fa-star"></i>';
            }

            testimonialContainer.innerHTML += `
        <div class="min-w-[300px] md:min-w-[360px] max-w-[380px] snap-center bg-white p-8 rounded-[2rem] border border-slate-100 shadow-premium hover:shadow-hover hover:-translate-y-2 transition-all duration-300 flex flex-col group relative">
          <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-4">
              <img src="${testi.image}" alt="${testi.name}" class="w-12 h-12 rounded-full object-cover ring-2 ring-primary/20 bg-slate-50">
              <div>
                <h4 class="font-bold text-darkText leading-tight">${testi.name}</h4>
                <p class="text-xs text-slate-500 font-medium">${testi.role}</p>
              </div>
            </div>
            <div class="text-accent text-[10px] flex gap-0.5">
              ${starsHtml}
            </div>
          </div>

          <div class="flex flex-wrap gap-2 mb-5">
            <span class="bg-primary/10 text-primary text-[10px] font-bold px-2.5 py-1 rounded-md uppercase tracking-wide">
              <i class="fas fa-seedling mr-1 opacity-70"></i> ${testi.level || "Beginner"}
            </span>
            <span class="bg-slate-100 text-slate-500 text-[10px] font-bold px-2.5 py-1 rounded-md uppercase tracking-wide">
              <i class="fas fa-code-branch mr-1 opacity-70"></i> First Coding
            </span>
          </div>

          <p class="text-slate-600 text-sm leading-relaxed mb-6 italic flex-1">"${testi.testimonial}"</p>

          <div class="mt-auto pt-5 border-t border-slate-100 flex items-center justify-between">
            <div>
              <p class="text-[9px] text-slate-400 font-bold uppercase mb-1 tracking-widest">MINI PROJECT</p>
              <p class="text-sm font-bold text-primary"><i class="fas fa-rocket text-[10px] mr-1 opacity-70"></i> ${testi.project}</p>
            </div>
            <div class="w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center text-slate-300 group-hover:bg-primary/10 group-hover:text-primary transition-colors">
              <i class="fas fa-quote-right text-[10px]"></i>
            </div>
          </div>
        </div>
      `;
        });
    }
});
