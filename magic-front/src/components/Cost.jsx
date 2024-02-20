import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import { fetchCost, fetchElement } from "../services/api/Costs";

function Cost({ cost }) {
  const [costData, setCostData] = useState();
  const [elementData, setElementData] = useState();
  console.log(cost);
  useEffect(() => {
    fetchCost(cost).then((answer) => setCostData(answer["hydra:member"]));
    fetchElement(costData.element).then((answer) =>
      setElementData(answer["hydra:member"]),
    );
  }, []);

  return (
    <div>
      {costData.number} {elementData.name}
    </div>
  );
}
export default Cost;
Cost.propTypes = {
  // eslint-disable-next-line react/require-default-props
  cost: PropTypes.string,
};
