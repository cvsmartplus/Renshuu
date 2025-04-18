export default function PrimaryButton({
    className = '',
    disabled,
    children,
    pending,
    ...props
}) {
    return (
        <button
            {...props}
            className={
                `${
                    disabled ? 'opacity-25' : ''
                } ` + className
            }
            disabled={disabled}
        >
        {pending ? 'Loading...' : children}           
        </button>
    );
}
