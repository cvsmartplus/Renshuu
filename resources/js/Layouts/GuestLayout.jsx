

export default function GuestLayout({ status, children }) {
    return (
        <div className="d-flex justify-content-center align-items-center vh-100">
            <div className="card shadow-lg p-3" style={{ width: '400px' }}>
            <div className="card-body">

                        {status && (
                            <div className="alert alert-success text-center">
                                {status}
                            </div>
                        )}
                {children}
            </div>
            </div>
        </div>
    );
}
