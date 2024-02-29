import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import { fetchElement } from "../services/api/Element";
import CardForCosts from "./CardForCosts";

function CardForElement({ id = 1 }) {
  const [eltData, setEltData] = useState([]);
  useEffect(() => {
    fetchElement(id).then((answer) => setEltData(answer));
  }, []);
  return (
    <>
      <div className="header__title key__title">{eltData.name}</div>
      {!eltData.costs ? (
        <></>
      ) : (
        eltData.costs.map((costs) => <CardForCosts url={costs} />)
      )}
    </>
  );
}
export default CardForElement;

CardForElement.propTypes = {
  id: PropTypes.string,
};
