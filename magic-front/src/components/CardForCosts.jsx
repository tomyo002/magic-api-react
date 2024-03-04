import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";

import CostCard from "./CostCard";
import { fetchCostUrl } from "../services/api/Costs";
import { fetchCardUrl } from "../services/api/cards";

function CardForCosts({ url = "" }) {
  const [cardData, setCardData] = useState([]);
  useEffect(() => {
    fetchCostUrl(url).then((cost) => fetchCardUrl(cost.card).then(setCardData));
  }, []);

  return cardData.id ? (
    <div className="card" key={cardData.id}>
      <article className="card__header header__title article__card">
        {cardData.name}{" "}
        <div>
          <CostCard costs={cardData.costs} key={cardData.id} />
        </div>
      </article>
      <a href={`/card/${cardData.id}`}>
        <button type="button" className="btn">
          plus info
        </button>
      </a>
    </div>
  ) : null;
}
export default CardForCosts;
CardForCosts.propTypes = {
  url: PropTypes.string,
};
