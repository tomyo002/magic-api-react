import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import { URL_ELEMENT } from "../services/url/BaseUrl";
import { fetchCostUrl } from "../services/api/Costs";
import { fetchElementUrl } from "../services/api/Element";

function Cost({ cost = "" }) {
  const [costData, setCostData] = useState([]);
  const [elementData, setElementData] = useState([]);
  useEffect(() => {
    fetchCostUrl(cost).then((answer) => {
      setCostData(answer);
      fetchElementUrl(answer.element).then(setElementData);
    });
  }, []);

  return (
    <div>
      {costData.number}{" "}
      <img
        className="icon"
        src={`${URL_ELEMENT.iconUrl(costData.element)}`}
        alt={elementData.name}
      />
    </div>
  );
}
export default Cost;
Cost.propTypes = {
  cost: PropTypes.string,
};
