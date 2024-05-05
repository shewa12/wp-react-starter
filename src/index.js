import { createRoot } from '@wordpress/element';
import './style.scss';

function App() {
    return (
        <div class="app">
            <svg width="30%" height="30%" viewBox="-10.5 -9.45 21 18.9" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-sm me-0 w-10 h-10 text-brand dark:text-brand-dark flex origin-center transition-all ease-in-out"><circle cx="0" cy="0" r="2" fill="currentColor"></circle><g stroke="currentColor" stroke-width="1" fill="none"><ellipse rx="10" ry="4.5"></ellipse><ellipse rx="10" ry="4.5" transform="rotate(60)"></ellipse><ellipse rx="10" ry="4.5" transform="rotate(120)"></ellipse></g></svg>
            <h1>Hello WP React Developer!</h1>
        </div>
    );
 }

// Render your React component instead
const root = createRoot(document.getElementById('app'));
root.render(<App />);
