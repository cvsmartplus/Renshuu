import React from "react";
import CountUp from "react-countup";

const Feature = () => {
  const counterData = [
    {
      id: 1,
      icon: "fas fa-user-graduate", // Ganti dengan ikon FontAwesome
      title: 200,
      suffix: "k",
      text: "Students",
      bg: "bg-primary",
    },
    {
      id: 2,
      icon: "fas fa-chalkboard-teacher",
      title: 120,
      suffix: "+",
      text: "Online Courses",
      bg: "bg-success",
    },
    {
      id: 3,
      icon: "fas fa-smile",
      title: 100,
      suffix: "%",
      text: "Satisfaction",
      bg: "bg-warning",
    },
  ];

  return (
    <section className="py-5" style={{ backgroundColor: "#F7F7F7" }}>
      <div className="container">
        <div className="row align-items-center justify-content-center text-center text-xl-start">
          <div className="col-lg-5">
            <h2 className="fs-1 fw-bold mb-4">
              Kenapa harus bergabung dengan kami?
            </h2>
          </div>

          <div className="col-lg-7">
            <div className="row g-4">
              {counterData.map((data) => (
                <div className="col-md-4" key={data.id}>
                  <div
                    className={`p-4 text-white rounded shadow ${data.bg} d-flex flex-column align-items-center`}
                  >
                    <i className={`${data.icon} fa-3x mb-3`}></i>
                    <div className="h2">
                      <CountUp end={data.title} enableScrollSpy />
                      <span> {data.suffix}</span>
                    </div>
                    <p className="mb-0">{data.text}</p>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Feature;
