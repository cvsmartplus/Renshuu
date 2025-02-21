import { Link } from "@inertiajs/react";
import { useState } from "react";

const ArticleCard = ({ article }) => {
    const [hovered, setHovered] = useState(false);
    return (
      <div
        className={`card h-100 shadow-sm p-2 ${hovered ? "shadow-lg" : ""}`}
        style={{
          transition: "transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out",
          transform: hovered ? "translateY(-5px)" : "translateY(0)",
          borderRadius: "10px",
        }}
        onMouseEnter={() => setHovered(true)}
        onMouseLeave={() => setHovered(false)}
      >
        <img
          src={article.media_path}
          className="card-img-top"
          alt={article.title}
          style={{ height: "180px", objectFit: "cover", borderRadius: "8px" }}
        />
        <div className="card-body d-flex flex-column text-start">
          <h5 className="card-title fs-5 text-start">{article.title}</h5>
          <p className="card-text flex-grow-1 text-start">{article.excerpt}</p>
          <Link href={route("artikel.show", article.slug)} className="text-blue text-start text-decoration-none mt-auto">
            Selengkapnya &gt;
          </Link>


        </div>
      </div>
    );
  };


export default ArticleCard;