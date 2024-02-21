import {useEffect, useState} from "react";
import PropTypes from "prop-types";
import {fetchCard} from "../services/api/cards.js";

function CardsDetails({ id ="" })
{
    const [cardData, setCardData] = useState([]);
    useEffect(()=>{
        fetchCard(id).then((answer) => {setCardData(answer); console.log(answer);})
    }, [])
    return (<><div>{cardData.name}</div>
            <div>{cardData.subtype}</div></>);
}
export default CardsDetails;
CardsDetails.propsType={
    id: PropTypes.string,
}