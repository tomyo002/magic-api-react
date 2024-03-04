import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import CardForCosts from "./CardForCosts";
import { fetchElementId } from "../services/api/Element";

function CardForElement({ id = 1 }) {
  const [eltData, setEltData] = useState([]);
  useEffect(() => {
    fetchElementId(id).then(setEltData);
  }, []);

  return (
    <>
      <div className="header__title key__title">{eltData.name}</div>
      {eltData.costs
        ? eltData.costs.map((costs) => <CardForCosts url={costs} key={costs} />)
        : null}
    </>
  );
}
export default CardForElement;

CardForElement.propTypes = {
  id: PropTypes.string,
};
