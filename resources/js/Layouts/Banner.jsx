import React from 'react';
import { Link } from '@inertiajs/react';

const Banner = () => {
    return (
        <section 
            className="d-flex align-items-center justify-content-center text-center py-3 py-md-5 py-xl-8 sidebar"
            style={{ minHeight: '85vh' }}
        >
            <div className="container">
                <div className="row gy-4 align-items-center justify-content-center text-md-start">
                    
                    {/* Banner Content */}
                    <div className="col-12 col-md-10 col-lg-6 text-center text-lg-start">
                        <div className="banner-content px-3 px-md-4">
                            <h1 className="fw-bold mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </h1>
                            <p className="mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ullam libero magni 
                                reiciendis quam ipsa blanditiis, facilis velit eaque illo? Consequuntur necessitatibus 
                                molestias repellendus. Dolores, expedita?
                            </p>
                            <div className="btn-container d-flex justify-content-center justify-content-lg-start">
                                <Link className="btn-cta py-3 px-5 rounded-3" href="/">
                                    Jelajahi lebih lanjut
                                </Link>
                            </div>
                        </div>
                    </div>
                    
                    {/* Banner Image */}
                    <div className="col-12 col-md-10 col-lg-6 d-flex justify-content-center">
                        <div className="banner-img-round mt-4 mt-lg-0 px-3 px-md-4">
                            <img src="/images/assets/banner.png" alt="Banner" className="img-fluid w-100 h-auto" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
};

export default Banner;