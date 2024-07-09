import NavBar from "./components/NavBar";

import romeralLogo from "/logo.png";
import "./app.css";

const App = () => {
  return (
    <>
      <div className='bg-yellow-green-500 min-h-screen'>
        <NavBar />
        <h1>Romeral Estereo</h1>
        <a href='https://romeralestereo.com' target='_blank'>
          <img src={romeralLogo} className='logo' alt='Vite logo' />
        </a>
      </div>
    </>
  );
};

export default App;
