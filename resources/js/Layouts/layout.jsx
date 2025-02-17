import Footer from "@/Components/Common/Footer";
import NavBar from "@/Components/Common/NavBar";

export default function Layout({ children, withNav = true, withFooter = true }) {
    return (
        <>
            {withNav && <NavBar />}
            <main>{children}</main>
            {withFooter && <Footer />}
        </>
    );
}
