import React, { useState } from "react";

const articles = [
  {
    id: 1,
    title: "Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka",
    description: "Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern",
    image: "https://picsum.photos/350/250?random=4",
  },
  {
    id: 2,
    title: "Pentingnya Literasi Digital bagi Generasi Muda",
    description: "Bagaimana kita dapat mempersiapkan anak-anak menghadapi dunia digital.",
    image: "https://picsum.photos/350/250?random=5",
  },
  {
    id: 3,
    title: "Teknologi AI dalam Dunia Pendidikan",
    description: "Bagaimana kecerdasan buatan membantu menciptakan pengalaman belajar yang lebih baik.",
    image: "https://picsum.photos/350/250?random=6",
  },
  {
    id: 4,
    title: "Revolusi Industri 4.0 dan Dampaknya pada Pendidikan",
    description: "Menyiapkan kurikulum masa depan untuk menghadapi era digital.",
    image: "https://picsum.photos/350/250?random=7",
  },
];

const ArticleCards = () => {
  const [hovered, setHovered] = useState(null);

  return (
    <div className="container text-center my-5">
      <h2 className="fw-bold mb-5">Baca juga informasi beragam informasinya</h2>
      <div className="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        {articles.map((article) => (
          <div key={article.id} className="col">
            <div
              className={`card h-100 shadow-sm p-2 ${hovered === article.id ? "shadow-lg" : ""}`}
              style={{
                transition: "transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out",
                transform: hovered === article.id ? "translateY(-5px)" : "translateY(0)",
                borderRadius: "10px",
              }}
              onMouseEnter={() => setHovered(article.id)}
              onMouseLeave={() => setHovered(null)}
            >
              <img
                src={article.image}
                className="card-img-top"
                alt={article.title}
                style={{ height: "180px", objectFit: "cover", borderRadius: "8px" }}
              />
              <div className="card-body d-flex flex-column text-start">
                <h5 className="card-title fs-5 text-start">{article.title}</h5>
                <p className="card-text flex-grow-1 text-start">{article.description}</p>
                <a href="#" className="text-primary text-start text-decoration-none mt-auto fw-bold">
                  Selengkapnya &gt;
                </a>
              </div>
            </div>
          </div>
        ))}
      </div>
      <button className="btn btn-cta mt-5">Lihat Selengkapnya</button>
    </div>
  );
};

export default ArticleCards;
