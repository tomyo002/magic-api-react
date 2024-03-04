import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import CostCard from "./CostCard";
import { fetchCardUrl } from "../services/api/cards";

function CardExtension({ url = "" }) {
  const [cardData, setCardData] = useState([]);
  useEffect(() => {
    fetchCardUrl(url).then(setCardData);
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
export default CardExtension;
CardExtension.propTypes = {
  url: PropTypes.string,
};
