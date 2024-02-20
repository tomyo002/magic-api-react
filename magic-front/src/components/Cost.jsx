import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import { fetchCost, fetchElement } from "../services/api/Costs";

function Cost({ cost = "" }) {
  const [costData, setCostData] = useState([]);
  const [elementData, setElementData] = useState([]);
  useEffect(() => {
    fetchCost(cost).then((answer) => {setCostData(answer);
      fetchElement(answer.element).then((answer) =>
          setElementData(answer),
      );});
  }, []);
  return (
    <div>
      {costData.number} {elementData.name}
    </div>
  );
}
export default Cost;
Cost.propTypes = {
  cost: PropTypes.string,
};
