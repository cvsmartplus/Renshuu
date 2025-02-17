import { Link } from "@inertiajs/react";
import React from "react";
import ArticleGrid from "../Common/ArticleGrid";

const ArticleCards = () => {
    const articles = [
      { id: 1, title: "Masa Depan Pendidikan", description: "Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern", image: "https://picsum.photos/350/250?random=4" },
      { id: 2, title: "Pentingnya Literasi Digital", description: "Bagaimana kita dapat mempersiapkan anak-anak menghadapi dunia digital.", image: "https://picsum.photos/350/250?random=5" },
      { id: 3, title: "Teknologi AI dalam Dunia Pendidikan", description: "Bagaimana kecerdasan buatan membantu menciptakan pengalaman belajar yang lebih baik.", image: "https://picsum.photos/350/250?random=6" },
      { id: 4, title: "Revolusi Industri 4.0", description: "Menyiapkan kurikulum masa depan untuk menghadapi era digital.", image: "https://picsum.photos/350/250?random=7" },

  ];
  return (
    <div className="container text-center my-5">
      <h2 className="fw-bold mb-5">Baca juga informasi beragam informasinya</h2>
      <ArticleGrid
        articles={articles}
      />
      <Link href={route("artikel.index")} className="btn btn-cta mt-5">
        Lihat Selengkapnya
      </Link>
    </div>
  );
};

export default ArticleCards;