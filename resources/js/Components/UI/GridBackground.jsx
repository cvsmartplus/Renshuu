import React from "react";

const GridBackground = ({ children }) => {
  return (
    <div className="grid-container">
      {/* Grid sebagai background */}
      <div className="grid-overlay">
        {Array.from({ length: 2000 }).map((_, index) => (
          <div key={index} className="grid-box"></div>
        ))}
      </div>
      {/* Konten utama */}
      <div className="grid-content">{children}</div>
    </div>
  );
};

export default GridBackground;
