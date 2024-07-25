import { PropTypes } from "prop-types";

const Card = ({ children }) => {
  return (
    <div
      className={`bg-orange-wheel-300 bg-opacity-20 backdrop-blur-sm rounded-lg flex items-center flex-col max-w-md w-full text-orange-wheel-50 p-4 border border-orange-wheel-600`}
    >
      {children}
    </div>
  );
};
Card.propTypes = {
  children: PropTypes.node.isRequired,
};

export default Card;
