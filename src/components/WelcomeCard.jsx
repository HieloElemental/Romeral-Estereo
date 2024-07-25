import Card from "../containers/Card";

import MediaFacebookIcon from "../assets/media-facebook-icon.svg?react";
import MediaInstagramIcon from "../assets/media-instagram-icon.svg?react";
import MediaXIcon from "../assets/media-x-icon.svg?react";

const WelcomeCard = () => {
  return (
    <Card type='welcome'>
      <h1
        className='text-4xl font-bold text-shadow-md text-shadow-orange-wheel-900 mb-2'
        style={{ textShadow: "3px 3px 1px #4A2007" }}
      >
        Bienvenidos
      </h1>
      <p className='p-2 bg-yellow-green-50 rounded-md text-orange-wheel-900 px-4 mb-2'>
        Si por alguna razón la emisora no se reproduce pruebe{" "}
        <a className='underline' href='#'>
          hacer click aqui.
        </a>
      </p>
      <h2
        className='text-3xl font-semibold text-shadow-md text-shadow-orange-wheel-900 mb-2'
        style={{ textShadow: "3px 3px 1px #4A2007" }}
      >
        Siguenos
      </h2>
      <ul className='flex w-full justify-around fill-orange-wheel-800'>
        <li>
          <a href='#'>
            <MediaFacebookIcon className='w-14 h-14' />
          </a>
        </li>
        <li>
          <a href='#'>
            <MediaInstagramIcon className='w-14 h-14' />
          </a>
        </li>
        <li>
          <a href='#'>
            <MediaXIcon className='w-14 h-14' />
          </a>
        </li>
      </ul>
    </Card>
  );
};

export default WelcomeCard;
