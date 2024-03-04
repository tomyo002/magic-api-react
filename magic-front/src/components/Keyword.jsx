import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import { fetchKeywordCardUrl, fetchKeywordUrl } from "../services/api/Keywords";

function Keyword({ keyword }) {
  const [keyData, setKeyData] = useState([]);
  useEffect(() => {
    fetchKeywordCardUrl(keyword).then((answer) =>
      fetchKeywordUrl(answer.keyword).then(setKeyData),
    );
  }, []);

  return (
    <>
      <div>{keyData.name}</div>
      <div>description : {keyData.description}</div>
      <hr />
    </>
  );
}
export default Keyword;
Keyword.propType = {
  keyword: PropTypes.string,
};
