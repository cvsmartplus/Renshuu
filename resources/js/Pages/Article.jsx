import ArticleGrid from "@/Components/Common/ArticleGrid";
import SearchFilterBar from "@/Components/Common/SearchFilterBar";
import TitlePage from "@/Components/Common/TitlePage";
import Layout from "@/Layouts/layout";
import { Head } from "@inertiajs/react";
import { useState } from "react";

export default function Article() {
    const [searchTerm, setSearchTerm] = useState("");
    const [filter, setFilter] = useState("Semua");

    const filters = ["Semua", "Terbaru", "Terlama"];
    const PageTitle = "Artikel";

    // Data artikel dipindah ke sini
    const articles = [
        { id: 1, title: "Masa Depan Pendidikan", description: "Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern", image: "https://picsum.photos/350/250?random=4" },
        { id: 2, title: "Pentingnya Literasi Digital", description: "Bagaimana kita dapat mempersiapkan anak-anak menghadapi dunia digital.", image: "https://picsum.photos/350/250?random=5" },
        { id: 3, title: "Teknologi AI dalam Dunia Pendidikan", description: "Bagaimana kecerdasan buatan membantu menciptakan pengalaman belajar yang lebih baik.", image: "https://picsum.photos/350/250?random=6" },
        { id: 4, title: "Revolusi Industri 4.0", description: "Menyiapkan kurikulum masa depan untuk menghadapi era digital.", image: "https://picsum.photos/350/250?random=7" },
        { id: 5, title: "Pengembangan Kurikulum", description: "Bagaimana kita dapat mempersiapkan anak-anak menghadapi dunia digital.", image: "https://picsum.photos/350/250?random=8" },
        { id: 6, title: "Keamanan Siber di Era Digital", description: "Pentingnya kesadaran akan ancaman keamanan dalam dunia maya.", image: "https://picsum.photos/350/250?random=9" },
        { id: 7, title: "Internet of Things dalam Pendidikan", description: "Bagaimana IoT membantu meningkatkan kualitas pembelajaran.", image: "https://picsum.photos/350/250?random=10" },
        { id: 8, title: "Peran Big Data dalam Dunia Pendidikan", description: "Menganalisis tren pendidikan menggunakan data besar.", image: "https://picsum.photos/350/250?random=11" },
        { id: 9, title: "Pendidikan Inklusif", description: "Membuka akses pendidikan bagi semua kalangan.", image: "https://picsum.photos/350/250?random=12" },
        { id: 10, title: "Teknologi Blockchain dalam Pendidikan", description: "Bagaimana blockchain dapat meningkatkan transparansi dalam sertifikasi akademik.", image: "https://picsum.photos/350/250?random=13" },
        { id: 11, title: "Gamifikasi dalam Pembelajaran", description: "Mengapa metode pembelajaran berbasis game semakin diminati?", image: "https://picsum.photos/350/250?random=14" },
        { id: 12, title: "Masa Depan Robotika dalam Pendidikan", description: "Peran robot dalam membantu pengajaran di kelas.", image: "https://picsum.photos/350/250?random=15" },
        { id: 13, title: "Pentingnya Keterampilan Soft Skill", description: "Mengapa keterampilan komunikasi dan kolaborasi sangat penting?", image: "https://picsum.photos/350/250?random=16" },
        { id: 14, title: "Cloud Computing dalam Dunia Pendidikan", description: "Manfaat teknologi cloud dalam pembelajaran online.", image: "https://picsum.photos/350/250?random=17" },
        { id: 15, title: "Mengenal Metaverse dalam Pendidikan", description: "Bagaimana dunia virtual mengubah cara kita belajar?", image: "https://picsum.photos/350/250?random=18" },
        { id: 16, title: "Pengembangan Kurikulum", description: "Bagaimana kita dapat mempersiapkan anak-anak menghadapi dunia digital.", image: "https://picsum.photos/350/250?random=19" },
    ];
    

    // Filtering berdasarkan searchTerm
    const filteredArticles = articles
        .filter(article => 
            article.title.toLowerCase().includes(searchTerm.toLowerCase()) ||
            article.description.toLowerCase().includes(searchTerm.toLowerCase())
        )
        .sort((a, b) => {
            if (filter === "Terbaru") return b.id - a.id;
            if (filter === "Terlama") return a.id - b.id; 
            return 0;
        });

    return (
        <Layout title="Article">
            <Head title={PageTitle} />
            <TitlePage title={PageTitle}/>
                <SearchFilterBar 
                    searchTerm={searchTerm} 
                    setSearchTerm={setSearchTerm} 
                    filters={filters} 
                    setFilter={setFilter}
                    placeholder={"Cari Artikel.."}
                />            
            <ArticleGrid articles={filteredArticles} />
        </Layout>
    );
}
