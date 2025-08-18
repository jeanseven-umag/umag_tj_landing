import { Flex, Grid, Text } from "@mantine/core";
import { useState } from "react";
import { SectionCard } from "./SectionCard/SectionCard";

export const SectionInfo = ({ data }) => {
  const step = 6;
  const [visibleCount, setVisibleCount] = useState(step);
  const showMore = () => {
    setVisibleCount((prevCount) => prevCount + step);
  };
  return (
    <div className="knowledge-container">
      <Flex direction="column">
        <Text my={40} className="main-section-caption">
          {data?.[0]?.category_name || ""}
        </Text>
        <Grid>
          {data
            ?.slice(0, visibleCount)
            ?.sort((a, b) => a.is_soon - b.is_soon)
            ?.map((item, index) => (
              <Grid.Col md={4} sm={6} xs={12} key={index}>
                <SectionCard
                  item={item}
                  handleClick={() => {
                    if (item?.category_id == 19) {
                      const pathArray = window.location.pathname.split("/");
                      const curId = pathArray?.[2];
                      if (curId == 19) {
                        window.location.href = `/knowledge-base-new/${item?.link}`;
                      } else {
                        window.location.href = `/knowledge-base-category/8`;
                      }
                    } else {
                      window.location.href = `/knowledge-base-new/${item?.link}`;
                    }
                  }}
                />
              </Grid.Col>
            ))}
        </Grid>
        {visibleCount <= data?.length && (
          <Flex my={40} justify="center">
            <button className="show_more" onClick={() => showMore()}>
              Показать еще
            </button>
          </Flex>
        )}
      </Flex>
    </div>
  );
};
