require("./bootstrap");

import React from "react";
import ReactDOM from "react-dom";
import { Nomenclature } from "./components/Nomenclature/Nomenclature";
import "../sass/app.scss";
import { KnowledgeBase } from "./components/KnowledgeBase/KnowledgeBase";
import { Section } from "./components/Section/Section";
import { Tariffs } from "./components/Tariffs/Tariffs";

const nomenclature = document.getElementById("knowledge-base-root");
const categories = document.getElementById("categories-root");
const category = document.getElementById("category-root");
const ceny = document.getElementById("ceny-root");

if (nomenclature) {
  ReactDOM.render(<Nomenclature />, nomenclature);
} else if (categories) {
  ReactDOM.render(<KnowledgeBase />, categories);
} else if (category) {
  ReactDOM.render(<Section />, category);
} else if (ceny) {
  ReactDOM.render(<Tariffs />, ceny);
}
