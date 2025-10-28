window.selectProgram = function selectProgram({
    options = [],
    placeholder = "",
    initial = "",
    onPick = () => {},
} = {}) {
    return {
        open: false,
        value: initial || "",
        options,
        placeholder,
        activeIndex: 0,

        init() {
            this.setFrom(initial);
        },

        setFrom(v) {
            this.value = v ?? "";
            onPick(this.value);
        },

        displayLabel() {
            const found = this.options.find(
                (o) => String(o.id) === String(this.value)
            );
            return found?.label || this.placeholder;
        },

        toggle() {
            this.open = !this.open;
            if (this.open) this.syncActive();
        },

        close() {
            this.open = false;
        },

        choose(i) {
            const chosen = this.options[i];
            if (!chosen) return;
            this.value = chosen.id; 
            this.activeIndex = i;
            this.open = false;
            onPick(this.value); 
        },

        move(step) {
            if (!this.open) {
                this.open = true;
                return;
            }
            const n = this.options.length;
            this.activeIndex = (((this.activeIndex + step) % n) + n) % n;
        },

        syncActive() {
            const i = this.options.findIndex(
                (o) => String(o.id) === String(this.value)
            );
            this.activeIndex = i >= 0 ? i : 0;
        },
    };
};

window.selectUmur = function selectUmur({
    options = [],
    placeholder = "",
    initial = "",
    onPick = () => {},
} = {}) {
    return {
        open: false,
        value: initial || "",
        options,
        placeholder,
        activeIndex: 0,
        init() {
            this.setFrom(initial);
        }, 

        setFrom(v) {
            this.value = v ?? "";
            onPick(this.value); 
        },
        displayLabel() {
            return this.value || this.placeholder;
        },
        toggle() {
            this.open = !this.open;
            if (this.open) this.syncActive();
        },
        close() {
            this.open = false;
        },
        choose(i) {
            this.value = this.options[i];
            this.activeIndex = i;
            this.open = false;
            onPick(this.value);
        },
        move(step) {
            if (!this.open) {
                this.open = true;
                return;
            }
            const n = this.options.length;
            this.activeIndex = (((this.activeIndex + step) % n) + n) % n;
        },
        syncActive() {
            const i = this.options.indexOf(this.value);
            this.activeIndex = i >= 0 ? i : 0;
        },
    };
};

window.selectSource = function selectSource({
    options = [],
    placeholder = "",
    initial = "",
    onPick = () => {},
} = {}) {
    return {
        open: false,
        value: initial || "",
        options,
        placeholder,
        activeIndex: 0,

        init() {
            this.setFrom(initial);
        },

        setFrom(v) {
            this.value = v ?? "";
            onPick(this.value);
        },

        displayLabel() {
            const found = this.options.find(
                (o) => String(o.id) === String(this.value)
            );
            return found?.label || this.placeholder;
        },

        toggle() {
            this.open = !this.open;
            if (this.open) this.syncActive();
        },

        close() {
            this.open = false;
        },

        choose(i) {
            const chosen = this.options[i];
            if (!chosen) return;
            this.value = chosen.id; 
            this.activeIndex = i;
            this.open = false;
            onPick(this.value);
        },

        move(step) {
            if (!this.open) {
                this.open = true;
                return;
            }
            const n = this.options.length;
            this.activeIndex = (((this.activeIndex + step) % n) + n) % n;
        },

        syncActive() {
            const i = this.options.findIndex(
                (o) => String(o.id) === String(this.value)
            );
            this.activeIndex = i >= 0 ? i : 0;
        },
    };
};


window.trialForm = function trialForm(opts = {}) {
    return {
        step: 1,
        form: {
            phone: "",
            program: "",
            student_name: "",
            parent_name: "",
            email: "",
            schedule_date: "",
            schedule_time: "",
            has_device: "",
        },
        waNormalized: "",
        waError: "",
        onWaInput(v) {
            
            const digits = String(v || "").replace(/\D/g, "");
            this.form.phone = digits;

            if (!digits) {
                this.waError = "";
                return;
            }

            if (!/^0/.test(digits)) {
                this.waError = "Nomor harus diawali angka 0 (contoh: 0812… ).";
                return;
            }
            const len = digits.length;
            if (len < 10) {
                this.waError = `Nomor terlalu pendek. Minimal 10 digit.`;
                return;
            }
            if (len > 14) {
                this.waError = `Nomor terlalu panjang. Maksimal 14 digit.`;
                return;
            }

            this.waError = ""; 
        },

        get waStatus() {
            if (!this.form.phone) return "empty";
            return this.waError ? "invalid" : "valid";
        },

        submitStep1() {
            this.onWaInput(this.form.phone);
            if (this.waStatus !== "valid") return;
            
            this.go(2);
        },

        go(s) {
            this.step = s;
        },

        times: opts.times,

        get progress() {
            if (this.step === 1) return 25;
            if (this.step === 2) return 50;
            if (this.step === 3) return 75;
            if (this.step === 4) return 100;
            return 100;
        },
        get progressLabel() {
            return this.step === 4 ? "Selesai" : `${this.step}/4`;
        },

        go(n) {
            this.step = n;
        },

        initSchedulePicker(el) {
            // Atur rentang: mulai besok ~ +1 bulan, skip hari Minggu
            const today = new Date();
            const min = new Date(
                today.getFullYear(),
                today.getMonth(),
                today.getDate() + 1
            );
            const max = new Date(min);
            max.setMonth(max.getMonth() + 1);

            const nextValid = (d) => {
                let t = new Date(d);
                while (t.getDay() === 0) t.setDate(t.getDate() + 1); 
                return t;
            };
            const prevValid = (d) => {
                let t = new Date(d);
                while (t.getDay() === 0) t.setDate(t.getDate() - 1);
                return t;
            };

            let def = null;
            if (this.form.schedule_date) {
                const f = new Date(this.form.schedule_date);
                const inRange = f >= min && f <= max && f.getDay() !== 0;
                def = inRange ? f : null;
            }
            if (!def) {
                const cand = nextValid(min);
                def = cand <= max ? cand : prevValid(max);
            }

            flatpickr(el, {
                inline: true,
                dateFormat: "Y-m-d",
                minDate: min,
                maxDate: max,
                defaultDate: def,
                monthSelectorType: "dropdown",
                disable: [(date) => date.getDay() === 0], 
                onChange: (_sel, dateStr) => {
                    this.form.schedule_date = dateStr;
                },
                disableMobile: true,
            });

           
            if (!this.form.schedule_date && def) {
                const yyyy = def.getFullYear();
                const mm = String(def.getMonth() + 1).padStart(2, "0");
                const dd = String(def.getDate()).padStart(2, "0");
                this.form.schedule_date = `${yyyy}-${mm}-${dd}`;
            }
        },

        submit() {
            const csrf = this.$refs.csrf?.value;

            fetch(opts.postUrl, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    Accept: "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": csrf,
                },
                body: JSON.stringify(this.form),
                credentials: "same-origin",
            })
                .then((r) => {
                    if (!r.ok) throw new Error("Gagal menyimpan");
                    return r.json().catch(() => ({})); 
                })
                .then(() => {
                   
                    this.step = "success";
                    
                })
                .catch((err) => {
                    console.error(err);
                    alert("Maaf, terjadi kesalahan. Coba lagi ya.");
                })
                .finally(() => (this.loading = false));
        },

        resetForm() {
            this.step = 1;
            this.form = {
                phone: "",
                program: "",
                student_name: "",
                parent_name: "",
                email: "",
                schedule_date: "",
                schedule_time: "",
                has_device: "",
            };
        },
    };
};
