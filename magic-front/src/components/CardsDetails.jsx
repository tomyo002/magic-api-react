import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import { fetchCard, fetchExtension, fetchType } from "../services/api/cards.js";
import CostCard from "./CostCard.jsx";
import Keywords from "./Keywords.jsx";
import Capacities from "./Capacities.jsx";

function CardsDetails({ id = "" }) {
  const [cardData, setCardData] = useState([]);
  const [costs, setCosts] = useState([]);
  const [typeData, setTypeData] = useState([]);
  const [extData, setExtData] = useState([]);
  useEffect(() => {
    fetchCard(id).then((answer) => {
      setCardData(answer);
      console.log(answer);
      setCosts(answer.costs);
      fetchType(answer.type).then((answer) => setTypeData(answer));
      fetchExtension(answer.extension).then((answer) => setExtData(answer));
    });
  }, []);
  const detail = (
    <>
      <div className="card picture">
        <div className="picture__header">
          <div className="card__header header__title">{cardData.name}</div>
          <div>
            <a href={cardData.url}>site officiel</a>
          </div>
        </div>
        <div className="picture__detail">
          <a href={cardData.pictureUrl}>
            <img
              className="picture__size"
              src={`http://localhost:8000/api/cards/${id}/picture`}
            />
          </a>
        </div>
      </div>
      <div className="card">
        {" "}
        <div className="card__header header__title">Coût du sort</div>
        <CostCard costs={costs} />
      </div>
      <div className="card">
        <div className="card__header header__title">{typeData.name}</div>{" "}
        {typeData.description}
      </div>
      <div className="card">
        {" "}
        <div className="card__header header__title">Description</div>
        {!cardData.subtype ? "" : <div>Sous-type : {cardData.subtype}</div>}
        {!cardData.attackPoint ? (
          ""
        ) : (
          <div> Point d'attaque : {cardData.attackPoint}</div>
        )}
        {!cardData.healthPoint ? (
          ""
        ) : (
          <div>Point de vie : {cardData.healthPoint}</div>
        )}
        {!cardData.loyalty ? "" : <div>Loyauté : {cardData.loyalty}</div>}
        <div>Rareté : {cardData.rarity}</div>
      </div>
      <div className="card">
        <div className="card__header header__title">Extension</div>
        <div>nom : {extData.name}</div>
        <div>année de sortie : {extData.releaseYear}</div>
      </div>
      {!cardData.keywordCards ? (
        ""
      ) : (
        <div className="card">
          <div className="card__header header__title"> Mot de clé</div>
          <Keywords keywords={cardData.keywordCards} />{" "}
        </div>
      )}
      {!cardData.capacities ? (
        ""
      ) : (
        <div className="card">
          <div className="card__header header__title"> Capacité</div>
          <Capacities capacities={cardData.capacities} />{" "}
        </div>
      )}

      <a href="/">
        <button type="button" className="btn">
          retour
        </button>
      </a>
    </>
  );
  return detail;
}
export default CardsDetails;
CardsDetails.propsType = {
  id: PropTypes.string,
};
