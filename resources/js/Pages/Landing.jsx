import ArticleCards from "@/Components/Landing/ArticleGridTooltip";
import Counter from "@/Components/Landing/Counter";
import CourseGrid01 from "@/Components/Landing/CourseGridTooltip";
import Features from "@/Components/Landing/Features";
import Partner from "@/Components/Landing/Partner";
import Banner from "@/Components/Landing/Banner";
import Layout from "@/Layouts/layout";
import { Head } from "@inertiajs/react";
import StepFlow from "@/Components/Landing/StepFlow";

export default function Landing({title}) {
    return (
        <>
        <Layout>
        <Head title={title} />
        <Banner />
        <Features />
        <Counter />
        <StepFlow />
        <CourseGrid01 />
        <Partner/>
        <ArticleCards />
        </Layout>
        </>
    )
}