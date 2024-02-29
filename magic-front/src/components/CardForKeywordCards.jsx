import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import { fetchCard, fetchKeywordCard } from "../services/api/Keywords.js";
import CostCard from "./CostCard.jsx";

function CardForKeywordCards({url = ""}) {
  const [cardData, setCardData] = useState([])
  useEffect(() => {
    fetchKeywordCard(url).then((answer) => {
      fetchCard(answer.card).then((answer) => setCardData(answer))
    })
  }, []);
  const card = !cardData.id ? "" :
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
  return card;
}
export default CardForKeywordCards;

CardForKeywordCards.propTypes = {
  url: PropTypes.string,
}