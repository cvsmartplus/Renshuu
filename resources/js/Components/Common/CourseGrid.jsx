import { useState } from "react";
import CourseCard from "../UI/CourseCard";

export default function CourseGrid({courses}){
    return(
        <>
            <div className="container my-5">
                <div className="row">
                    {courses.length > 0 ? (
                        courses.map((course) => (
                            <div key={course.id} className="col-md-4 mb-3">
                                <CourseCard course={course} />
                            </div>
                    ))) : (
                        <p className="text-center w-100">Tidak ada artikel yang ditemukan.</p>
                    )}
                </div>
            </div>
            
            {}
        </>
    );
}