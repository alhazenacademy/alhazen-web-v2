// File data.js: Tempat untuk mengatur semua data konten website agar mudah diubah.

// 1. DATA JADWAL & KELAS BOOTCAMP
// Diatur agar full bulan Juni 2026, hanya hari Jumat dan Sabtu, dan kecuali tanggal merah (1 & 16).
// Setiap hari tersebut akan memiliki semua pilihan kelas (SD, SMP, SMA, Mahasiswa).

const bootcampEvents = [];

// Template dasar kelas (tanpa atribut waktu)
const baseClasses = [
    {
        title: "Starter Project Scratch Game",
        category: "SD",
        target: "SD – SMP",
        project: "Game Tangkap Ketupat",
        price: "Rp29.000",
        link: "https://goakal.com/alhazenacademy/starter-project/znb2b/apply",
        description: "Belajar membuat game interaktif menggunakan block programming Scratch. Sangat cocok untuk anak-anak yang baru mengenal logika dasar coding karena mudah dan menyenangkan.",
    },
    {
        title: "Starter Project 3D Animation",
        category: "SMP",
        target: "SMP",
        project: "Animasi 3D",
        price: "Rp29.000",
        link: "https://goakal.com/alhazenacademy/starter-project/9vz4p/apply",
        description: "Pelajari dasar-dasar modelling dan desain ruang digital 3D. Kamu akan dibimbing step-by-step untuk menghasilkan karya animasi ruang pertamamu yang menarik.",
    },
    {
        title: "Starter Project Python Automation",
        category: "SMA",
        target: "SMA",
        project: "QR Code Generator",
        price: "Rp29.000",
        link: "https://goakal.com/alhazenacademy/starter-project/u3irc/apply",
        description: "Kuasai fundamental bahasa pemrograman Python yang sangat populer di industri. Pada kelas ini, kamu akan langsung mempraktekkan koding untuk membangun aplikasi QR Code Generator.",
    },
    {
        title: "Starter Project Digital Productivity",
        category: "Mahasiswa",
        target: "Mahasiswa / Pencari Kerja",
        project: "Productivity Tools",
        price: "Rp29.000",
        link: "https://goakal.com/alhazenacademy/starter-project/c6pco/apply",
        description: "Tingkatkan produktivitas kerja dan skill digital esensial menggunakan fitur-fitur profesional Microsoft. Kelas ini sangat penting untuk persiapan jenjang karir di dunia kerja.",
    },
    {
        title: "Starter Project Scratch",
        category: "SD",
        target: "SD",
        project: "Pokemon Go",
        price: "Rp29.000",
        link: "https://goakal.com/alhazenacademy/starter-project/9vz4p/apply",
        description: "Fundamental coding untuk animasi dengan penggunaan event block, motion, control, hingga customisasi animasi. Lakukan semua tahapnya sambil membuat animasi pokemon dengan platform Scratch.",
    },
    {
        title: 'Starter Project IOT',
        category: 'SD',
        target: 'SD – SMP',
        project: 'SmartGate Jr.',
        price: 'Rp29.000',
        link: 'https://goakal.com/alhazenacademy/starter-project/kxu8k/apply',
        description: 'Belajar membuat palang otomatis yang bisa membuka dan menutup sendiri menggunakan sensor. Sangat cocok untuk anak-anak yang ingin mengenal teknologi IoT karena langsung bisa dipraktikkan dan hasilnya keren!'
    },
    {
        title: 'Starter Project IOT',
        category: 'SD',
        target: 'SD – SMP',
        project: 'TrafficBot Mini',
        price: 'Rp29.000',
        link: 'https://goakal.com/alhazenacademy/starter-project/3gqmz/apply',
        description: 'Belajar membuat simulasi lampu lalu lintas otomatis seperti di jalan raya sungguhan. Sangat cocok untuk anak-anak yang ingin memahami bagaimana kota pintar bekerja dengan cara yang seru dan mudah dipahami.'
    },
    {
        title: 'Starter Project IOT',
        category: 'SD',
        target: 'SD – SMP',
        project: 'TrashBot Hero',
        price: 'Rp29.000',
        link: 'https://goakal.com/alhazenacademy/starter-project/yqm9z/apply',
        description: 'Belajar membuat tong sampah pintar yang bisa terbuka sendiri saat tangan mendekat tanpa perlu disentuh. Sangat cocok untuk anak-anak yang ingin belajar teknologi sekaligus peduli terhadap kebersihan dan kesehatan lingkungan sekitar.'
    },
    {
        title: 'Starter Project IOT',
        category: 'SD',
        target: 'SD – SMP',
        project: 'LightSense Jr.',
        price: 'Rp29.000',
        link: 'https://goakal.com/alhazenacademy/starter-project/k0wok/apply',
        description: 'Belajar membuat lampu otomatis yang menyala saat gelap dan mati saat terang menggunakan sensor cahaya. Sangat cocok untuk anak-anak yang ingin mengenal konsep hemat energi melalui teknologi yang sederhana namun bermanfaat.'
    },
    {
        title: "Starter Project Python Game",
        category: "SMA",
        target: "SMA",
        project: "Batu, Gunting, Kertas",
        price: "Rp29.000",
        link: "https://goakal.com/alhazenacademy/starter-project/dkr11/apply",
        description: "Pelajari konsep dasar penggunaan conditional statement dan looping dalam bahasa Python melalui starter project Batu, Gunting, Kertas.",
    },
    {
        title: "Starter Project Python Adventure Game",
        category: "SMA",
        target: "SMA",
        project: "Adventure Game",
        price: "Rp29.000",
        link: "https://goakal.com/alhazenacademy/starter-project/zj472/apply",
        description: "Pelajari konsep dasar conditional statement, nested if, dan penggunaan input function dalam Python melalui project Adventure.",
    },
    {
        title: "Starter Project HTML CSS",
        category: "SMP",
        target: "SMP - SMA",
        project: "Simple Profile Card",
        price: "Rp29.000",
        link: "https://goakal.com/alhazenacademy/starter-project/bsqot/apply",
        description: "Memulai project Website HTML CSS menggunakan dasar bentuk card, penggunaan import font, dan inline css. Bangun profile yang elegan hanya dengan HTML CSS.",
    },
    {
        title: "Starter Project Python Block",
        category: "SD",
        target: "SD - SMP",
        project: "Calculator",
        price: "Rp29.000",
        link: "https://goakal.com/alhazenacademy/starter-project/0bwl2/apply",
        description: "Fundamental Layout Design untuk Mobile App untuk aplikasi calculator. Pelajari penggunaan variable, input text, join function, loop, hingga conditional statement.",
    },
    {
        title: "Starter Project Mobile App (Thunkable)",
        category: "SMP",
        target: "SMP - SMA",
        project: "Translator App",
        price: "Rp29.000",
        link: "https://goakal.com/alhazenacademy/starter-project/bpgra/apply",
        description: "Fundamental Mobile App untuk penggunaan text input, output, hingga penggunaan API translator. Simple layout untuk aplikasi sederhana.",
    },
    {
        title: "Starter Project Python",
        category: "SMP",
        target: "SMP - SMA",
        project: "Aplikasi Cuaca",
        price: "Rp29.000",
        link: "https://goakal.com/alhazenacademy/starter-project/h3sww/apply",
        description: "Fundamental Python dan pelajari bagaimana conditional statement bekerja dan penggunaan input function yang benar.",
    },
];

// Generate Kalender Bulan Juni 2026
const excludeDates = ["2026-06-01", "2026-06-16"];

for (let day = 1; day <= 30; day++) {
    let dateStr = `2026-06-${String(day).padStart(2, "0")}`;
    let dateObj = new Date(dateStr);
    let dayOfWeek = dateObj.getDay();

    // Hanya hari Jumat (5) dan Sabtu (6), serta skip tanggal merah yang dikecualikan (1 & 16 Juni)
    if ((dayOfWeek !== 5 && dayOfWeek !== 6) || excludeDates.includes(dateStr)) {
        continue;
    }

    // Tentukan opsi waktu berdasarkan hari
    let timeOptions = [];
    if (dayOfWeek === 6) {
        // Khusus Hari Sabtu
        timeOptions = ["09.00 – 10.00", "13.00 – 14.00", "16.00 – 17.00"];
    } else {
        // Weekdays (Jumat)
        timeOptions = ["16.00 – 17.00", "19.00 – 20.00"];
    }

    // Masukkan semua kategori kelas dengan semua variasi waktunya
    baseClasses.forEach((cls) => {
        timeOptions.forEach((time) => {
            bootcampEvents.push({ ...cls, date: dateStr, time: time });
        });
    });
}

// 2. DATA MENTOR
// Jika ingin menambah/mengubah daftar pengajar, cukup edit di bawah ini.
const mentorList = [
    {
        name: "Rama Nuzilo Deyanda",
        role: "Data Scientist",
        expertise: "Data Science, Machine Learning, IoT Development",
        description:
            "Berfokus pada data science, machine learning, dan IoT development menggunakan Python, SQL, Tableau, Arduino, dan Raspberry Pi.",
        image: "mentors/BTutor3.png",
        hoverImage: "mentors/Tutor3.png",
    },
    {
        name: "Fariha Ulya",
        role: "STEM Educator",
        expertise:
            "Visual Programming, Computational Thinking, Creative Coding",
        description:
            "Mentor visual programming untuk anak dan pemula menggunakan Scratch, Blockly, dan MIT App Inventor dengan pendekatan computational thinking.",
        image: "mentors/BTutor2.png",
        hoverImage: "mentors/Tutor2.png",
    },
    {
        name: "Fajar Malkan",
        role: "UI/UX Designer",
        expertise:
            "Figma, Design System, Prototyping, User Research, Wireframing, Typography",
        description:
            "UI/UX Designer yang berfokus pada desain antarmuka, wireframing, prototyping, dan user research menggunakan Figma dan Adobe XD.",
        image: "mentors/BTutor3.png",
        hoverImage: "mentors/Tutor3.png",
    },
    {
        name: "Ardiana Abdul",
        role: "Software Engineer",
        expertise: "Fullstack Web Development, UI/UX Design",
        description:
            "Software Engineer dengan spesialisasi fullstack dan frontend development menggunakan Figma, Laravel, Golang, dan Tailwind CSS.",
        image: "mentors/BTutor12.png",
        hoverImage: "mentors/Tutor12.png",
    },
    {
        name: "Miftahus Surur",
        role: "Software & Hardware Engineer",
        expertise:
            "Fullstack Web Development, UI/UX Design, IoT Development, Robotics",
        description:
            "Software & Hardware Engineer yang berfokus pada fullstack development, QA testing, IoT, dan robotics menggunakan Selenium, Arduino, Raspberry Pi, dan Micro:bit.",
        image: "mentors/BTutor13.png",
        hoverImage: "mentors/Tutor13.png",
    },
    {
        name: "Bagus Adam Farizi",
        role: "Software & Hardware Engineer",
        expertise:
            "Fullstack Web Development, UI/UX Design, IoT Development",
        description:
            "Software & Hardware Engineer dengan spesialisasi backend, fullstack development, dan IoT menggunakan Node.js, Golang, Python, Laravel, dan Raspberry Pi.",
        image: "mentors/BTutor14.png",
        hoverImage: "mentors/Tutor14.png",
    },
    {
        name: "Refina Aninda Legia",
        role: "Software Engineer & Data Analyst",
        expertise: "Fullstack Web Development, Data Analytics",
        description:
            "Software Engineer & Data Analyst yang berfokus pada fullstack development, data analytics, dan visual programming menggunakan MERN Stack, Django, SQL, Tableau, dan Scratch.",
        image: "mentors/BTutor5.png",
        hoverImage: "mentors/Tutor5.png",
    },
];

// 3. DATA TESTIMONI
// Data ini digunakan untuk menampilkan ulasan peserta pada section Testimoni
const testimonialList = [
    {
        name: "Rizky Pratama",
        role: "Siswa SMA",
        className: "Starter Project Python Automation",
        testimonial: "Awalnya saya takut belajar coding karena terlihat sulit. Tapi setelah ikut starter project ini ternyata coding bisa dipahami dengan mudah karena langsung praktek step-by-step.",
        project: "QR Code Generator",
        rating: 5,
        image: "https://ui-avatars.com/api/?name=Rizky+Pratama&background=random&color=fff",
        date: "2026",
        level: "Beginner",
    },
    {
        name: "Andi Saputra",
        role: "Siswa SD",
        className: "Starter Project Scratch Game",
        testimonial: "Seru banget! Aku baru pertama kali coding dan ternyata gampang. Dalam 1 jam aja aku udah bisa bikin game ketupat sendiri. Mentornya juga jelasinnya enak.",
        project: "Scratch Game",
        rating: 5,
        image: "https://ui-avatars.com/api/?name=Andi+Saputra&background=random&color=fff",
        date: "2026",
        level: "Beginner",
    },
    {
        name: "Siti Aminah",
        role: "Orang Tua Siswa",
        className: "Starter Project Scratch Game",
        testimonial: "Anak saya awalnya cuma suka main game, tapi setelah ikut starter project ini dia jadi tertarik bikin game sendiri. Programnya sangat ramah pemula dan tidak membingungkan.",
        project: "Scratch Game",
        rating: 5,
        image: "https://ui-avatars.com/api/?name=Siti+Aminah&background=random&color=fff",
        date: "2026",
        level: "Beginner",
    },
    {
        name: "Budi Santoso",
        role: "Mahasiswa",
        className: "Starter Project Digital Productivity",
        testimonial: "Materi yang diajarin benar-benar kepake buat kuliah dan kerjaan. Dulu ngerasa gaptek, sekarang jauh lebih pede pakai tools digital setelah bikin project ini.",
        project: "Digital Planner",
        rating: 5,
        image: "https://ui-avatars.com/api/?name=Budi+Santoso&background=random&color=fff",
        date: "2026",
        level: "Beginner",
    },
    {
        name: "Dina Fitriani",
        role: "Siswa SMP",
        className: "Starter Project 3D Animation",
        testimonial: "Gak nyangka bikin animasi 3D bisa secepat ini. Penjelasan mentornya step-by-step jadi gak pusing ngikutinnya. Project pertamaku langsung jadi!",
        project: "Mini Animation",
        rating: 5,
        image: "https://ui-avatars.com/api/?name=Dina+Fitriani&background=random&color=fff",
        date: "2026",
        level: "Beginner",
    },
    {
        name: "Arif Rahman",
        role: "Pemula",
        className: "Starter Project IoT",
        testimonial: "Saya belajar coding dari nol banget di sini. Praktiknya seru karena kita diajarin bikin project lampu pintar yang beneran bisa dikontrol. Makin tertarik mendalami IoT.",
        project: "Smart LED IoT",
        rating: 5,
        image: "https://ui-avatars.com/api/?name=Arif+Rahman&background=random&color=fff",
        date: "2026",
        level: "Beginner",
    },
    {
        name: "Fadhil Muhammad",
        role: "Siswa SMA",
        className: "Starter Project Python Automation",
        testimonial: "Dulu mikir Python tuh cuma buat programmer jago. Lewat starter project ini, aku bisa bikin Password Generator sendiri. Ternyata coding gampang dipahami!",
        project: "Password Generator",
        rating: 5,
        image: "https://ui-avatars.com/api/?name=Fadhil+Muhammad&background=random&color=fff",
        date: "2026",
        level: "Beginner",
    },
    {
        name: "Putri Larasati",
        role: "Mahasiswa",
        className: "Starter Project Digital Productivity",
        testimonial: "Suka banget sama sistem belajarnya. Gak kebanyakan teori yang bikin ngantuk, tapi langsung praktek bikin To Do App. Recommended buat yang pengen mulai belajar skill baru.",
        project: "To Do App",
        rating: 5,
        image: "https://ui-avatars.com/api/?name=Putri+Larasati&background=random&color=fff",
        date: "2026",
        level: "Beginner",
    },
    {
        name: "Kiki Amalia",
        role: "Siswa SD",
        className: "Starter Project Scratch Game",
        testimonial: "Belajarnya asik banget kayak lagi main game. Kakak mentornya sabar banget ngajarin dari nol sampe game aku selesai dibikin 100%.",
        project: "Scratch Game",
        rating: 5,
        image: "https://ui-avatars.com/api/?name=Kiki+Amalia&background=random&color=fff",
        date: "2026",
        level: "Beginner",
    },
    {
        name: "Kevin Sanjaya",
        role: "Siswa SMP",
        className: "Starter Project Python Automation",
        testimonial: "Belajar coding lewat starter project ternyata jauh lebih efektif daripada baca teori panjang-panjang. Aku langsung berhasil bikin calculator pertamaku.",
        project: "Mini Calculator",
        rating: 5,
        image: "https://ui-avatars.com/api/?name=Kevin+Sanjaya&background=random&color=fff",
        date: "2026",
        level: "Beginner",
    },
];
