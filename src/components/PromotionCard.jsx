import Card from "../containers/Card";

import romeralLogo from "/logo.png";

const PromotionCard = () => {
  return (
    <Card type='welcome'>
      <h1
        className='text-4xl font-bold text-shadow-md text-shadow-orange-wheel-900 mb-2'
        style={{ textShadow: "3px 3px 1px #4A2007" }}
      >
        Échanos un oído
      </h1>
      <img src={romeralLogo} className='logo w-10/12' alt='Vite logo' />
    </Card>
  );
};

export default PromotionCard;
