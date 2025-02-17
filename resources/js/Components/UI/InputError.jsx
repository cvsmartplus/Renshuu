export default function InputError({ message, className = '', ...props }) {
    return message ? (
    <p {...props} className={'small text-danger ' + className} style={{ fontSize: '0.75rem' }}>
        {message}
    </p>
    ) : null;
}
