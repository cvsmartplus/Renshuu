import { Link } from "@inertiajs/react";
import { useState } from "react";

export default function CourseCard({ course }) {
  const [hovered, setHovered] = useState(null);

  return (
    <div
      className={`card shadow-sm p-2 d-flex flex-column h-100 ${hovered === course.id ? "shadow-lg" : ""}`}
      style={{
        transition: "all 0.3s ease-in-out",
        transform: hovered === course.id ? "scale(1.05)" : "scale(1)",
      }}
      onMouseEnter={() => setHovered(course.id)}
      onMouseLeave={() => setHovered(null)}
    >
      {/* Gambar Course */}
      <img src={course.image} className="card-img-top" alt={course.title} style={{ objectFit: "cover", height: "200px" }} />
      
      {/* Konten Card */}
      <div className="card-body text-start d-flex flex-column flex-grow-1">
        <h5 className="card-title fs-4 mb-3">{course.title}</h5>
        <p className="card-text flex-grow-1">{course.description}</p>
        
        <div className="d-flex align-items-center mb-2">
          <i className="fas fa-user me-2"></i> {course.student}
        </div>

        <hr />

        {/* Harga dan Tombol Selengkapnya */}
        <div className="d-flex justify-content-between">
          <p className="text-dark">
            Harga: <b>Rp10.000</b>
          </p>
          <Link href={route("course.show", { slug: course.slug })} className="text-dark text-decoration-none">
            Selengkapnya &gt;
          </Link>
        </div>
      </div>
    </div>
  );
}
