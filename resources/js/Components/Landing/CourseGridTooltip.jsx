import React, { useState } from "react";

const courses = [
  {
    id: 1,
    title: "Smart Home",
    description: "Membangun Rumah Cerdas: Teknologi dan Integrasi Sistem",
    image: "https://picsum.photos/350/250?random=1",
  },
  {
    id: 2,
    title: "Smart Farming",
    description: "Pertanian Cerdas: Inovasi Teknologi untuk Efisiensi dan Produktivitas",
    image: "https://picsum.photos/350/250?random=2",
  },
  {
    id: 3,
    title: "Smart City",
    description: "Kota Pintar: Solusi Teknologi untuk Perkotaan yang Lebih Baik",
    image: "https://picsum.photos/350/250?random=3",
  },
];

const CourseCards = () => {
  const [hovered, setHovered] = useState(null);

  return (
    <div className="container text-center my-5">
      <h2 className="fw-bold mb-5">Jelajahi Berbagai Kursus Terbaik Kami!</h2>
      <div className="row justify-content-center">
        {courses.map((course) => (
          <div key={course.id} className="col-md-4 mb-3">
            <div
              className={`card shadow-sm p-2 ${hovered === course.id ? "shadow-lg" : ""}`}
              style={{
                transition: "all 0.3s ease-in-out",
                transform: hovered === course.id ? "scale(1.05)" : "scale(1)",
              }}
              onMouseEnter={() => setHovered(course.id)}
              onMouseLeave={() => setHovered(null)}
            >
              <img src={course.image} className="card-img-top" alt={course.title} />
              <div className="card-body text-start">
                <h5 className="card-title fs-4 mb-3">{course.title}</h5>
                <p className="card-text">{course.description}</p>
                <div className="d-flex align-items-center mb-2">
                  <i className="fas fa-user me-2"></i> 5
                </div>
                <hr />
                <div className="d-flex justify-content-between">
                  <p className="text-dark">
                    Harga: <b>Rp10.000</b>
                  </p>
                  <a href="#" className="text-dark text-decoration-none">
                    Selengkapnya &gt;
                  </a>
                </div>
              </div>
            </div>
          </div>
        ))}
      </div>
      <button className="btn btn-cta mt-4">Lihat Selengkapnya</button>
    </div>
  );
};

export default CourseCards;
