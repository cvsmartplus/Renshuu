import SideBar from "@/Components/Common/SideBar";
import Layout from "@/Layouts/layout";
import { Head } from "@inertiajs/react";

export default function UserTransactions() {
    const transactions = [
        { id: "Faktur#1", amount: "Rp.59.000", date: "1-1-2025", status: "Lunas" },
        { id: "Faktur#2", amount: "Rp.90.000", date: "12-12-2025", status: "Lunas" },
        { id: "Faktur#3", amount: "Rp.70.000", date: "11-3-2026", status: "Lunas" },
        { id: "Faktur#4", amount: "Rp.30.000", date: "6-4-2026", status: "Lunas" },
        { id: "Faktur#5", amount: "Rp.50.000", date: "6-6-2026", status: "Lunas" },
    ];

    return (
        <Layout>
            <Head title="User Transactions" />
            <SideBar>
                <div className="profile" style={{
                    backgroundImage: "url('../../../images/assets/framer.png')",
                    backgroundRepeat: "no-repeat",
                    backgroundPosition: "right",
                    height: "10vh"
                }}>                
                </div>

                <div className="container-fluid p-4">
                    <h3 className="mb-3">Riwayat Pembayaran ({transactions.length})</h3>
                    <div className="table-responsive">
                        <table className="table table-bordered table-hover">
                            <thead className="table-light">
                                <tr>
                                    <th>Faktur <i className="fas fa-sort"></i></th>
                                    <th>Jumlah <i className="fas fa-sort"></i></th>
                                    <th>Tanggal <i className="fas fa-sort"></i></th>
                                    <th>Status <i className="fas fa-sort"></i></th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {transactions.map((trx, index) => (
                                    <tr key={index}>
                                        <td>{trx.id}</td>
                                        <td>{trx.amount}</td>
                                        <td>{trx.date}</td>
                                        <td>
                                            <span className="badge bg-success">
                                                {trx.status} <i className="fas fa-check-circle"></i>
                                            </span>
                                        </td>
                                        <td>
                                            <button className="btn btn-outline-secondary btn-sm">
                                                <i className="fas fa-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                ))}
                            </tbody>
                        </table>
                    </div>
                </div>
            </SideBar>
        </Layout>
    );
}
