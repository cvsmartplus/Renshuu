import { Link, usePage } from "@inertiajs/react";
import React from "react";
import ArticleGrid from "../Common/ArticleGrid";

const ArticleCards = () => {
    const { articles } = usePage().props; // Mengambil data artikel dari props yang dikirim oleh backend

    return (
        <div className="container text-center my-5">
            <h2 className="fw-bold mb-5">Baca juga informasi beragam informasinya</h2>
            <ArticleGrid articles={articles} />
            <Link href={route("artikel.index")} className="btn btn-cta mt-5">
                Lihat Selengkapnya
            </Link>
        </div>
    );
};

export default ArticleCards;
