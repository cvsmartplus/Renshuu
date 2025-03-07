import CourseGrid from "@/Components/Common/CourseGrid";
import TitlePage from "@/Components/Common/TitlePage";
import Layout from "@/Layouts/layout";
import { Head } from "@inertiajs/react";


export default function Course({courses}) {
        const PageTitle = "Kursus";

    return(
        <>
            <Layout>
            <Head title={PageTitle} />
                <TitlePage title={PageTitle}/>
                <CourseGrid courses={courses}/>
            </Layout>
        </>
    );
}