import Footer from "@/Components/Footer";
import NavBar from "@/Components/NavBar";
export default function Layout({ children }) {
    return (
        <>
            <NavBar />
            {children}
            <Footer />
        </>
    )
}