import ArticleGrid from "@/Components/Common/ArticleGrid";
import SearchFilterBar from "@/Components/Common/SearchFilterBar";
import TitlePage from "@/Components/Common/TitlePage";
import Layout from "@/Layouts/layout";
import { Head } from "@inertiajs/react";
import { useState } from "react";

export default function Article({ articles }) { 
    const [searchTerm, setSearchTerm] = useState("");
    const [filter, setFilter] = useState("Semua");

    const filters = ["Semua", "Terbaru", "Terlama" ];
    const PageTitle = "Artikel";

    // 🟢 Filtering berdasarkan searchTerm
    const filteredArticles = articles
        .filter(article => 
            article?.title?.toLowerCase().includes(searchTerm.toLowerCase()) ||
            article?.description?.toLowerCase().includes(searchTerm.toLowerCase())
        )
        .sort((a, b) => {
            if (filter === "Terbaru") return new Date(b.created_at) - new Date(a.created_at);
            if (filter === "Terlama") return new Date(a.created_at) - new Date(b.created_at);
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
