import PropTypes from "prop-types";
import NavBar from "./NavBar";
import Player from "./Player";

import LogoImage from "../assets/logo.png";

const Header = ({ subtitle }) => {
  return (
    <div>
      <NavBar />
      <header className='flex md:gap-4 flex-col items-center justify-center bg-gradient-to-b from-orange-wheel-100 via-orange-wheel-500 to-orange-wheel-500 min-h-[32rem] md:min-h-[37rem] text-orange-wheel-50'>
        <figure>
          <img
            className='w-36 md:w-60'
            src={LogoImage}
            alt='Romeral Estereo - Logo'
          />
        </figure>
        <h1 className='font-bold text-2xl md:text-7xl'>Romeral Estereo</h1>
        <h2 className='font-bold tracking-widest text-xl md:text-4xl mb-4'>
          -- {subtitle} --
        </h2>
        <Player />
      </header>
      <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 230'>
        <path
          className='fill-orange-wheel-500'
          d='M0,64L48,90.7C96,117,192,171,288,165.3C384,160,480,96,576,90.7C672,85,768,139,864,176C960,213,1056,235,1152,229.3C1248,224,1344,192,1392,176L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z'
        ></path>
      </svg>
    </div>
  );
};
Header.propTypes = {
  subtitle: PropTypes.string,
};

export default Header;
