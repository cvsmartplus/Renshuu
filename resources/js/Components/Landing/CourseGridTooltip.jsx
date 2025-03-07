import { Link, usePage } from "@inertiajs/react";
import React from "react";
import CourseGrid from "../Common/CourseGrid";

const CourseCards = () => {
  const { courses } = usePage().props;
  return (
    <div className="container text-center my-5">
      <h2 className="fw-bold mb-5">Jelajahi Berbagai Kursus Terbaik Kami!</h2>
      <div className="row justify-content-center">
        <CourseGrid courses={courses}/>
      </div>
      <Link href={route("course.index")} className="btn btn-cta mt-5">
          Lihat Selengkapnya
      </Link>
    </div>
  );
};

export default CourseCards;
