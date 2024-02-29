import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import { fetchCardUrl, fetchCostUrl } from "../services/api/Element";
import CostCard from "./CostCard.jsx";

function CardForCosts({ url = "" }) {
  const [cardData, setCardData] = useState([]);
  useEffect(() => {
    fetchCostUrl(url).then((answer) =>
      fetchCardUrl(answer.card).then((answer) => setCardData(answer)),
    );
  }, []);
  return !cardData.id ? (
    ""
  ) : (
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
  );
}
export default CardForCosts;
CardForCosts.propTypes = {
  url: PropTypes.string,
};
