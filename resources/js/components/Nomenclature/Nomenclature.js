import { NomenclatureInfo } from "./NomenclatureInfo/NomenclatureInfo";
import { Searcher } from "../Searcher/Searcher";
import { useEffect, useState } from "react";
import axios from "axios";
import { NomenclatureMainBlock } from "./NomenclatureMainBlock/NomenclatureMainBlock";

export const Nomenclature = () => {
  const pathArray = window.location.pathname.split("/");
  const currentNomenclature = pathArray?.[2];
  const [info, setInfo] = useState();
  const version = pathArray?.[3] || "";
  const getData = async () => {
    try {
      const response = await axios.get(
        `/knowledge-base-react/${currentNomenclature}/${version}`
      );
      setInfo(response?.data);
    } catch (e) {
      console.error(e);
    }
  };
  const handleCopy = (e) => {
    e.preventDefault();
  };

  const handleCut = (e) => {
    e.preventDefault();
  };
  useEffect(() => {
    if (currentNomenclature) getData();
  }, [currentNomenclature]);
  return (
    <div
      onCopy={handleCopy}
      onCut={handleCut}
      className="user-select-disabled margin-header-footer"
    >
      <Searcher />
      <NomenclatureInfo
        readTime={info?.read_time}
        title={info?.title}
        description={info?.description}
      />
      {info && <NomenclatureMainBlock info={info} version={version} />}
    </div>
  );
};
