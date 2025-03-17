export default function Checkbox({ id, className = '', label, ...props }) {
    return (
        <div className="form-check d-flex align-items-center">
            <input
                {...props}
                id={id} // Pastikan id diberikan agar label bisa diklik
                type="checkbox"
                className={'form-check-input me-2 ' + className}
            />
            {label && <label htmlFor={id} className="form-check-label">{label}</label>}
        </div>
    );
}
