import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import CostCard from "./CostCard";
import Keywords from "./Keywords";
import Capacities from "./Capacities";
import { URL_CARD } from "../services/url/BaseUrl";
import { fetchCardId } from "../services/api/cards";
import { fetchTypeUrl } from "../services/api/Type";
import { fetchExtensionUrl } from "../services/api/Extension";

function CardsDetails({ id = "" }) {
  const [cardData, setCardData] = useState([]);
  const [costs, setCosts] = useState([]);
  const [typeData, setTypeData] = useState([]);
  const [extData, setExtData] = useState([]);
  useEffect(() => {
    fetchCardId(id).then((card) => {
      setCardData(card);
      setCosts(card.costs);
      fetchTypeUrl(card.type).then(setTypeData);
      fetchExtensionUrl(card.extension).then(setExtData);
    });
  }, []);

  return (
    <>
      <div className="card picture">
        <div className="picture__header">
          <div className="card__header header__title">{cardData.name}</div>
          <div>
            <a href={cardData.url}>Site officiel</a>
          </div>
        </div>
        <div className="picture__detail">
          {cardData ? (
            <a href={cardData.pictureUrl}>
              <img
                className="picture__size"
                src={`${URL_CARD.iconId(cardData.id)}`}
              />
            </a>
          ) : null}
        </div>
      </div>
      <div className="card">
        {" "}
        <div className="card__header header__title">Coût du sort</div>
        <CostCard costs={costs} key={cardData.id} />
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
          <Keywords keywords={cardData.keywordCards} key={cardData.id} />{" "}
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
    </>
  );
}
export default CardsDetails;
CardsDetails.propType = {
  id: PropTypes.string,
};
