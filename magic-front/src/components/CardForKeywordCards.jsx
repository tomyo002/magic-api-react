import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import { fetchKeywordCardUrl } from "../services/api/Keywords";
import CostCard from "./CostCard";
import { fetchCardUrl } from "../services/api/cards";

function CardForKeywordCards({ url = "" }) {
  const [cardData, setCardData] = useState([]);
  useEffect(() => {
    fetchKeywordCardUrl(url).then((keyCard) => {
      fetchCardUrl(keyCard.card).then(setCardData);
    });
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
export default CardForKeywordCards;

CardForKeywordCards.propTypes = {
  url: PropTypes.string,
};
