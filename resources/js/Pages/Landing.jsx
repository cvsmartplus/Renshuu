import About from "@/Components/About";
import ArticleCards from "@/Components/ArticleGridTooltip";
import Counter from "@/Components/Counter";
import CourseGrid01 from "@/Components/CourseGridTooltip";
import Features from "@/Components/Features";
import Partner from "@/Components/partner";
import Banner from "@/Layouts/Banner";
import Layout from "@/Layouts/layout";
import { Head } from "@inertiajs/react";

export default function Landing({title}) {
    return (
        <>
        <Layout>
        <Head title={title} />
        <Banner />
        <Features />
        <Counter />
        <About />
        <CourseGrid01 />
        <Partner/>
        <ArticleCards />
        </Layout>
        </>
    )
}