import romeralLogo from "/logo.png";
import "./App.css";

const App = () => {
  return (
    <>
      <div>
        <a href='https://romeralestereo.com' target='_blank'>
          <img src={romeralLogo} className='logo' alt='Vite logo' />
        </a>
      </div>
      <h1>Romeral Estereo</h1>
    </>
  );
};

export default App;
