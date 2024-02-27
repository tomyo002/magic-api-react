import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import { fetchCost, fetchElement } from "../services/api/Costs";

const BASE_URL = "http://localhost:8000";
function Cost({ cost = "" }) {
  const [costData, setCostData] = useState([]);
  const [elementData, setElementData] = useState([]);
  useEffect(() => {
    fetchCost(cost).then((answer) => {
      setCostData(answer);
      fetchElement(answer.element).then((answer) => setElementData(answer));
    });
  }, []);
  return (
    <div>
      {costData.number}{" "}
      <img
        className="icon"
        src={`${BASE_URL}${costData.element}/icon`}
        alt={elementData.name}
      />
    </div>
  );
}
export default Cost;
Cost.propTypes = {
  cost: PropTypes.string,
};
