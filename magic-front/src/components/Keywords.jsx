import React from "react";
import PropTypes from "prop-types";
import Keyword from "./Keyword";

function Keywords({ keywords }) {
  return (
    <>
      {keywords.map((k) => (
        <Keyword keyword={k} key={k} />
      ))}
    </>
  );
}
export default Keywords;

Keywords.propTypes = {
  keywords: PropTypes.node,
};
