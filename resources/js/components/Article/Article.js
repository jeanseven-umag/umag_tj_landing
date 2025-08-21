import { Card, Flex, Grid, Text } from "@mantine/core";
import axios from "axios";
import { useEffect, useState } from "react";
import { getStripText } from "../../utils/getStripText";

export const Article = () => {
  const [data, setData] = useState([]);

  const getData = async () => {
    await axios.get(`/knowledge-base-popular`).then((resp) => {
      setData(resp?.data ?? []);
    });
  };
  useEffect(() => {
    getData();
  }, []);

  return (
    <div className="knowledge-container">
      <Flex direction="column" pb={40} my={40}>
        <Text my={40} className="main-section-caption">
          Мақолаҳои машҳур
        </Text>
        <Grid>
          {data?.map((item, index) => (
            <Grid.Col lg={3} md={4} sm={6} xs={12} key={`article-${index}`}>
              <Card
                className="main-card article-card_height"
                padding="20px"
                radius="8px"
                withBorder
                onClick={() => {
                  window.location.href = `/knowledge-base-new/${item?.link}`;
                }}
              >
                <Flex
                  className="article-card_height"
                  direction="column"
                  justify="space-between"
                >
                  <Flex my={20}>
                    <Text className="main-tag">{item?.category_name}</Text>
                  </Flex>
                  <Text mb={32} className="main-caption-text">
                    {item?.title}
                  </Text>
                  <Text className="main-text">
                    <div
                      dangerouslySetInnerHTML={{
                        __html: getStripText(item.description, 85),
                      }}
                    />
                  </Text>
                </Flex>
              </Card>
            </Grid.Col>
          ))}
        </Grid>
      </Flex>
    </div>
  );
};
