import Header from "./components/Header";

import romeralLogo from "/logo.png";
import "./app.css";

const App = () => {
  return (
    <>
      <div
        className='bg-yellow-green-800 min-h-screen bg-fixed'
        style={{
          backgroundImage: `url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" height="50px" width="50px" padding="40px" viewBox="0 0 20 20" fill="rgb(240,130,32)"><path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" /></svg>`,
        }}
      >
        <Header subtitle='Bienvenidos' />
        <h1>Romeral Estereo</h1>
        <a href='https://romeralestereo.com' target='_blank'>
          <img src={romeralLogo} className='logo' alt='Vite logo' />
        </a>
      </div>
    </>
  );
};

export default App;
