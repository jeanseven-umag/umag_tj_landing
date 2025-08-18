import { SectionInfo } from "./SectionInfo/SectionInfo";
import { Article } from "../Article/Article";
import { Searcher } from "../Searcher/Searcher";
import axios from "axios";
import { useEffect, useState } from "react";

export const Section = () => {
  const [data, setData] = useState([]);
  const pathname = window.location.pathname.split("/");
  const categoryId = pathname?.[2];
  const getData = async () => {
    await axios
      .get(`/knowledge-base-category-react/${categoryId}`)
      .then((resp) => {
        setData(resp?.data ?? []);
      });
  };
  const handleCopy = (e) => {
    e.preventDefault();
  };

  const handleCut = (e) => {
    e.preventDefault();
  };
  useEffect(() => {
    getData();
  }, []);
  return (
    <div
      onCopy={handleCopy}
      onCut={handleCut}
      className="user-select-disabled margin-header-footer"
    >
      <Searcher />
      <div className="bg-light">
        <SectionInfo data={data} />
        <Article />
      </div>
    </div>
  );
};
