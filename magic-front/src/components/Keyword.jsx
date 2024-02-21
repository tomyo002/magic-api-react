import React, {useEffect, useState} from "react";
import PropTypes from "prop-types";
import {fetchKeyword, fetchKeywordCard} from "../services/api/Keywords.js";

function Keyword({ keyword }) {
    const[keyData, setKeyData] = useState([])
    useEffect(()=> {
        fetchKeywordCard(keyword).then((answer)=> fetchKeyword(answer.keyword).then((answer)=> setKeyData(answer)))
    });
    return(<>
        <div>{keyData.name}</div>
        <div>description : {keyData.description}</div>
        <hr />
        </>)
}
export default Keyword;
Keyword.propsType={
    keyword:PropTypes.string,
}